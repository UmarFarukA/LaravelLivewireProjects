function ApplicationProgress({ stages }) {
    return (
        <div className="mt-4 space-y-2">
            {stages.map(stage => (
                <div
                    key={stage.id}
                    className="flex items-center justify-between text-sm"
                >
                    <span className="text-gray-700">
                        {stage.name}
                    </span>

                    {stage.pivot.is_completed ? (
                        <span className="text-green-600 font-semibold">✓</span>
                    ) : (
                        <span className="text-gray-400">—</span>
                    )}
                </div>
            ))}
        </div>
    )
}

export default ApplicationProgress;
