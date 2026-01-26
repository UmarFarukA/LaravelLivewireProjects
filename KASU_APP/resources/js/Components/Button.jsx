export default function Button({
    type = 'button',
    disabled = false,
    children,
    fullWidth = false,
    variant = 'primary',
    className = '',
    ...props
}) {
    const baseStyles =
        'inline-flex items-center justify-center rounded-md font-semibold transition focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed'

    const variants = {
        primary:
            'bg-green-700 text-white hover:bg-green-800 focus:ring-green-600',
        secondary:
            'bg-gray-200 text-gray-800 hover:bg-gray-300 focus:ring-gray-400',
        danger:
            'bg-red-600 text-white hover:bg-red-700 focus:ring-red-500',
        outline:
            'border border-green-700 text-green-700 hover:bg-green-50 focus:ring-green-600',
    }

    return (
        <button
            type={type}
            disabled={disabled}
            className={`
                ${baseStyles}
                ${variants[variant]}
                ${fullWidth ? 'w-full' : ''}
                py-2 px-4
                ${className}
            `}
            {...props}
        >
            {children}
        </button>
    )
}
