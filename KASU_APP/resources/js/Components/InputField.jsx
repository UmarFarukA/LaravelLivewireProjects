export default function InputField({
    label,
    name,
    type = 'text',
    value = '',
    onChange,
    error = null,
    required = false,
    placeholder = '',
    disabled = false,
}) {
    const id = `input-${name}`

    return (
        <div className="mb-4">
            <label
                htmlFor={id}
                className="block text-sm font-medium text-gray-700"
            >
                {label}
                {required && <span className="text-red-500 ml-1">*</span>}
            </label>

            <input
                id={id}
                name={name}
                type={type}
                value={value}
                onChange={onChange}
                placeholder={placeholder}
                disabled={disabled}
                aria-invalid={error ? true : false}
                aria-describedby={error ? `${id}-error` : undefined}
                className={`mt-1 block w-full rounded-md border p-2 focus:ring-green-600 focus:border-green-600
                    ${error ? 'border-red-500' : 'border-gray-300'}
                `}
            />

            {error && (
                <p
                    id={`${id}-error`}
                    className="mt-1 text-sm text-red-600"
                >
                    {error}
                </p>
            )}
        </div>
    )
}
